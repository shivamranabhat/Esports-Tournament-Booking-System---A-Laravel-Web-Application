import mysql.connector
import sys
import json
import pandas as pd
from datetime import datetime, timedelta

def get_player_data(user_id):
    # Connect to MySQL database
    db = mysql.connector.connect(user='root', password='',host = 'localhost', database='finalyear_project')

    # Get total kills in relation to tournament
    kills_query = "SELECT tournaments.name, SUM(histories.kills) as total_kills \
                   FROM histories \
                   JOIN tournaments ON histories.tournament_id = tournaments.id \
                   JOIN teams ON teams.id = histories.team_id \
                   WHERE teams.user_id = %s \
                   GROUP BY tournaments.name"


    kills = pd.read_sql_query(kills_query, db, params=[user_id])

    # Get player's weekly score
    now = datetime.now()
    week_ago = now - timedelta(days=7)

    week_query = "SELECT tournaments.name, SUM(results.total) as total_points \
                  FROM results \
                  JOIN tournaments ON results.tournament_id = tournaments.id \
                  JOIN teams ON teams.id = results.team_id \
                  WHERE results.created_at >= %s AND teams.user_id = %s \
                  GROUP BY tournaments.name"

    week_data = pd.read_sql_query(week_query, db, params=[week_ago, user_id])

    # Get player's monthly score
    month_ago = now - timedelta(days=30)

    month_query = "SELECT tournaments.name, SUM(results.total) as total_points \
                   FROM results \
                   JOIN tournaments ON results.tournament_id = tournaments.id \
                   JOIN teams ON teams.id = results.team_id \
                   WHERE results.created_at >= %s AND teams.user_id = %s \
                   GROUP BY tournaments.name"

    month_data = pd.read_sql_query(month_query, db, params=[month_ago, user_id])

    # Get player's tournament results
    results_query = "SELECT tournaments.name, SUM(results.total) as total_points \
                     FROM results \
                     JOIN tournaments ON results.tournament_id = tournaments.id \
                     JOIN teams ON teams.id = results.team_id \
                     WHERE teams.user_id = %s \
                     GROUP BY tournaments.name"

    results = pd.read_sql_query(results_query, db, params=[user_id])

    # Close MySQL connection
    db.close()

    # Return data as a dictionary
    return {"kills": kills.to_dict(),
            "week_data": week_data.to_dict(),
            "month_data": month_data.to_dict(),
            "results": results.to_dict()}


# Get user ID from Laravel controller
user_id = sys.argv[1]

# Call the function and return the data as a JSON string
data = get_player_data(user_id)
json_data = json.dumps(data)

# Return the JSON string to Laravel controller
print(json_data)
