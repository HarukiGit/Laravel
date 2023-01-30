import gspread
import json

from google.oauth2.service_account import Credentials

# 認証のjsoファイルのパス
secret_credentials_json_oath = 'spreadsheet-test-374407-798b20b3070c.json' 

scopes = [
    'https://www.googleapis.com/auth/spreadsheets',
    'https://www.googleapis.com/auth/drive'
]

credentials = Credentials.from_service_account_file(
    secret_credentials_json_oath,
    scopes=scopes
)

def gSheet():
    gc = gspread.authorize(credentials)
    # https://docs.google.com/spreadsheets/d/{ココ}/edit#gid=0
    worksheet = gc.open_by_key('11dPpsU062I1Gcx5vruMGY_ARW9rt__X4c56_KaPQhi4').sheet1
    # A列1行目からD列3行目まで表示
    return worksheet.acell('A1').value