from gpiozero import LED
from time import sleep
import json
import logging

#Dieses Programm ignoriert die Werte in der JSON Datei und fährt die Rolladen nach oben, schreibt dann ein OPEN in die JSON-Datei.
#Es wird auf JSON als Austauschsprache gesetzt, so kann dann auch in der Webseite der Status angezeigt werden, falls benötigt.
#Der 'state' kann die folgenden Werte annehmen:
#OPEN (Komplett hochgefahren)
#CLOSED (Nach unten gefahren, aber die Schlitze sind auf)
#SHUT (Komplett geschlossen),
#LIGHT (Kleiner Spalt lässt Licht rein),
#HALF (Hälfte verdeckt)

logging.basicConfig(filename='rolladen.log',level=logging.DEBUG)
logging.debug('Start fix.py')

#Definiere Ports
logging.debug('Definiere Ports')
up = LED(17)
down = LED(22)
#I2C freilassen für etwaigen Arduino für Temperatur etc

logging.debug('Definiere Daten')
data = {"state": "OPEN"}

with open('rolladen.json', 'w') as objectfile:
    logging.info('Status wird überschrieben: %s', data)
    json.dump(data, objectfile)
    #Tatsächliches Hochfahren
    logging.debug('Beginne Hochfahren...')
    up.on()
    sleep(5)
    logging.debug('Ende Hochfahren...')
    up.off()

logging.debug('Ende fix.py')