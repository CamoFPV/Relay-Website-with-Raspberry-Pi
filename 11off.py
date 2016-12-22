#!/usr/bin/env python
# IMPORT NECESSARY LIBRARIES
import RPi.GPIO as GPIO
import time

# INITIALIZE THE GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(6,GPIO.OUT)

# TURN ON RELAY 1
GPIO.output(6,0)

# CLEAN UP GPIO
GPIO.cleanup()


