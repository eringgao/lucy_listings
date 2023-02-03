# from pyzillow.pyzillow import ZillowWrapper
# zillow_data = ZillowWrapper(YOUR_ZILLOW_API_KEY)

import requests

url = "https://zillow56.p.rapidapi.com/search"

querystring = {"location":"houston, tx"}

headers = {
	"X-RapidAPI-Key": "86eb772e60msh8af120c6ebefaa4p1c82a8jsn0c868a0fc813",
	"X-RapidAPI-Host": "zillow56.p.rapidapi.com"
}

response = requests.request("GET", url, headers=headers, params=querystring)

print(response.text)