#!/usr/bin/env python
# IMPORT NECESSARY LIBRARIES
import RPi.GPIO as GPIO
import time

# INITIALIZE THE GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(4,GPIO.OUT)

# TURN ON RELAY 1
GPIO.output(4,0)

# CLEAN UP GPIO
# GPIO.cleanup()


