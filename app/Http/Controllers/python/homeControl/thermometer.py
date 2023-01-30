import requests
import json

OPEN_TOKEN = '1dfdf56670d58d674978022325d3319e901c922fbbd5c0809d735a7ea1990c3ee1c12530315d5adeaa6a7f9b33ced28e'
API_HOST = 'https://api.switch-bot.com'

HEADERS = {
    'Authorization': OPEN_TOKEN,
    'Content-Type': 'application/json; charset=utf8'
}
def temp():
    url = f"{API_HOST}/v1.0/devices/E20D65807F7B/status"
    res = requests.get(url, headers=HEADERS)
    data = res.json()
    return(float(data['body']['temperature']))

def hum():
    url = f"{API_HOST}/v1.0/devices/E20D65807F7B/status"
    res = requests.get(url, headers=HEADERS)
    data = res.json()
    return(int(data['body']['humidity']))
