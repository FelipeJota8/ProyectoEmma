import requests
import json

url = 'http://192.168.1.104/api'

def loginServer(base_url, api_login, api_password):
    print("Obteniendo Token...")
    data_get = {'email': api_login,
                'password': api_password,
                'loginMode': 1}
    headers = { 'Content-Type':'application/json', 'X-Requested-With':'XMLHttpRequest'}                
    r = requests.post(base_url + '/auth/login', data=json.dumps(data_get), headers=headers, verify=True)
    if r.ok:
        authToken = json.loads(r.text.encode('utf-8'))['access_token']
        cookies = dict(r.cookies)
        print("Token: Ok")
        return authToken, cookies, r.status_code
    else:
        print("HTTP %i - %s, Message %s" % (r.status_code, r.reason, r.text.encode('utf-8')))
        authToken = '0'
        cookies = dict(r.cookies)
    return  authToken, cookies, r.status_code

print("Sistema Logger - Sistemas embebidos PUCV")

try:
    authToken, cookies, status_code = loginServer(base_url=url, api_login='admin@embebidos.pucv.cl', api_password='admin123')
except:
    print("Ocurrio un error al hacer login")

data_get = {'val': '23', 'raspberry_id': '1'}
headers = { 'Content-Type':'application/json', 'X-Requested-With':'XMLHttpRequest', 'Authorization':'Bearer '+authToken }
r = requests.post(url + '/sensores/temperatura', data=json.dumps(data_get), headers=headers, verify=True)
print(r.text)