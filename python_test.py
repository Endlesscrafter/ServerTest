from gpiozero import LED
from time import sleep

red = LED(17)

red.on()
sleep(1)
red.off()
sleep(1)

#f = open("test.txt","w+")
#for i in range(10):
#     f.write("This is line %d\r\n" % (i+1))
#f.close()
#print("Hallo Welt")