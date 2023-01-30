import requests
import json
import datetime

OPEN_TOKEN = '1dfdf56670d58d674978022325d3319e901c922fbbd5c0809d735a7ea1990c3ee1c12530315d5adeaa6a7f9b33ced28e'
API_HOST = 'https://api.switch-bot.com'

HEADERS = {
    'Authorization': OPEN_TOKEN,
    'Content-Type': 'application/json; charset=utf8'
}

url = f"{API_HOST}/v1.0/devices/01-202204291519-89007218/commands"

def on():
    params = {
            "command": "暖房",
            "commandType": "customize"
        }
    res = requests.post(url, data=json.dumps(params),headers=HEADERS)
    data = res.json()
    f = open('log.txt', 'a', encoding='UTF-8')
    f.write(str(datetime.datetime.now())+' on\n')
    f.close()

def off():
    params = {
            "command": "setAll",
            "parameter": f"0,0,0,off",
            "commandType": "command"
        }
    res = requests.post(url, data=json.dumps(params),headers=HEADERS)
    data = res.json()
    f = open('log.txt', 'a', encoding='UTF-8')
    f.write(str(datetime.datetime.now())+' off\n')
    f.close()