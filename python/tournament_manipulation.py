import mysql.connector
import sys
import json
import pandas as pd
from datetime import datetime, timedelta

# def get_tournament_data(tournament_id,team_id):
#     # Connect to MySQL database
#     db = mysql.connector.connect(user='root', password='',host = 'localhost', database='finalyear_project')

#     # Get total kills in relation to tournament
#     team_kills_query = "SELECT team_id, player_name,tournament_id, SUM(kills) as total_kills \
#                    FROM histories \
#                    WHERE tournament_id = %s \
#                    WHERE team_id = %s \
#                    GROUP BY player_name"


#     team_kills = pd.read_sql_query(team_kills_query, db, params=[tournament_id,team_id])



# # Get total score and kills in relation to match number from results table
# score_query = "SELECT team_id, match_no, tournament_id, total, kills \
#                 FROM results \
#                 WHERE teams.user_id = %s \
#                 GROUP BY match_no"

# score = pd.read_sql_query(score_query, db, params=[tournament_id,team_id])

# # Close MySQL connection
# db.close()

# # Return data as a dictionary
# return {"team_kills": team_kills.to_dict(),
#         "score": score.to_dict()}


# # Get tournament and team id from Laravel controller
# tournament_id = sys.argv[1]
# team_id = sys.argv[2]

# # Call the function and return the data as a JSON string
# data = get_tournament_data(tournament_id,team_id)
# json_data = json.dumps(data)

# # Return the JSON string to Laravel controller
# print(json_data)

def get_tournament_data(tournament_id,team_id):
    # Connect to MySQL database
    db = mysql.connector.connect(user='root', password='',host = 'localhost', database='finalyear_project')

    # Get total kills in relation to tournament
    team_kills_query = "SELECT team_id, player_name,tournament_id, SUM(kills) as total_kills \
                   FROM histories \
                   WHERE tournament_id = %s AND team_id = %s \
                   GROUP BY player_name"


    team_kills = pd.read_sql_query(team_kills_query, db, params=[tournament_id,team_id])

    # Get total score and kills in relation to match number from results table
    score_query = "SELECT team_id, match_no, tournament_id, total, kills \
                FROM results \
                WHERE tournament_id = %s AND team_id = %s \
                GROUP BY match_no"

    score = pd.read_sql_query(score_query, db, params=[tournament_id,team_id])

    # Close MySQL connection
    db.close()

    # Return data as a dictionary
    return {"team_kills": team_kills.to_dict(),
            "score": score.to_dict()}

# Get tournament and team id from Laravel controller
tournament_id = sys.argv[1]
team_id = sys.argv[2]

# Call the function and return the data as a JSON string
data = get_tournament_data(tournament_id,team_id)
json_data = json.dumps(data)

# Return the JSON string to Laravel controller
print(json_data)

