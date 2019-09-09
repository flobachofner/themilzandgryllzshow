from flask import render_template, Flask

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

app = Flask(__name__)

@app.route("/")
def output():
    driver = webdriver.Chrome("/Users/Florian/Downloads/chromedriver")
    driver.get("https://themilzandgryllzshow.podbean.com/")
    time.sleep(1)
    elem = driver.find_element_by_id("home_visitor_stat")
    print(elem.text)
    txt = elem.text
    driver.close()
    return render_template('homepage.html', console_gave = [txt])
    
    
    

if __name__ == "__main__":
	app.run()





#python script4.py
#python ~/Documents/6_Webdesign/09_Dreamweaver/themilzandgryllzshow/script4.py
# cd Documents/6_Webdesign/09_Dreamweaver/themilzandgryllzshow

