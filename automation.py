from selenium import webdriver
from selenium.webdriver.common.keys import Keys
user = "user25@email.com"
pwd = "user25"
driver = webdriver.Firefox()
driver.get("http://localhost/car_rental_system/carrentalsystem/")
assert "Online Car Rental System" in driver.title
elem=driver.find_element_by_id("log")
elem.send_keys(Keys.RETURN)
elem = driver.find_element_by_id("email")
elem.send_keys(user)
elem = driver.find_element_by_id("pwd")
elem.send_keys(pwd)
elem.send_keys(Keys.RETURN)
driver.close()
