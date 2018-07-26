from gpiozero import LED
from time import sleep
import json
import logging

#Programm zu kompletten Hochfahren der Rolladen. Dabei kann ruhig etwas länger hochgefahren werden, denn ein Relais stoppt bei Endanschlag.
#Es wird auf JSON als Austauschsprache gesetzt, so kann dann auch in der Webseite der Status angezeigt werden, falls benötigt.
#Der 'state' kann die folgenden Werte annehmen:
#OPEN (Komplett hochgefahren)
#CLOSED (Nach unten gefahren, aber die Schlitze sind auf)
#SHUT (Komplett geschlossen),
#LIGHT (Kleiner Spalt lässt Licht rein),
#HALF (Hälfte verdeckt)

logging.basicConfig(filename='rolladen.log',level=logging.INFO)
logging.debug('Start fix.py')

#Definiere Ports
up = LED(17)
down = LED(22)
#I2C freilassen für etwaigen Arduino für Temperatur etc

with open("rolladen.json","r") as objectfile:
	data = json.load(objectfile)
	#Ist jetzt vom typ python-dictionary


if data['state'] != "OPEN":
    data['state'] = "OPEN"
    with open('rolladen.json', 'w') as objectfile:
        json.dump(data, objectfile)
    #Tatsächliches Hochfahren

logging.debug('Ende rauf.py')