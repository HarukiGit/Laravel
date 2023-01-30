import requests
import json
import datetime

OPEN_TOKEN = '1dfdf56670d58d674978022325d3319e901c922fbbd5c0809d735a7ea1990c3ee1c12530315d5adeaa6a7f9b33ced28e'
API_HOST = 'https://api.switch-bot.com'

HEADERS = {
    'Authorization': OPEN_TOKEN,
    'Content-Type': 'application/json; charset=utf8'
}

url = f"{API_HOST}/v1.0/devices/6055F92E123E/commands"

def on():
    params = {
            "command": "turnOn",
            "commandType": "command"
        }
    res = requests.post(url, data=json.dumps(params),headers=HEADERS)
    data = res.json()

    f = open('log.txt', 'a', encoding='UTF-8')
    f.write(str(datetime.datetime.now())+' humidifier on\n')
    f.close()

def off():
    params = {
            "command": "turnOff",
            "commandType": "command"
        }
    res = requests.post(url, data=json.dumps(params),headers=HEADERS)
    data = res.json()
    f = open('log.txt', 'a', encoding='UTF-8')
    f.write(str(datetime.datetime.now())+' humidifier off\n')
    f.close()