import requests
from bs4 import BeautifulSoup


webpage_response = requests.get('https://themilzandgryllzshow.podbean.com/')

webpage = webpage_response.content

soup = BeautifulSoup(webpage, "html.parser")


print(soup.select("#home_visitor_stat")[0].get_text())

#python ~/Documents/6_Webdesign/09_Dreamweaver/themilzandgryllzshow/script2.py
# cd Documents/6_Webdesign/09_Dreamweaver/themilzandgryllzshow
