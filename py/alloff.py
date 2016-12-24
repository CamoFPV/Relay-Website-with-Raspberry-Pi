#!/usr/bin/env python
# IMPORT NECESSARY LIBRARIES
import RPi.GPIO as GPIO
import time

# INITIALIZE THE GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(2,GPIO.OUT)
GPIO.setup(3,GPIO.OUT)
GPIO.setup(4,GPIO.OUT)
GPIO.setup(17,GPIO.OUT)
GPIO.setup(27,GPIO.OUT)
GPIO.setup(22,GPIO.OUT)
GPIO.setup(10,GPIO.OUT)
GPIO.setup(9,GPIO.OUT)
GPIO.setup(11,GPIO.OUT)
GPIO.setup(5,GPIO.OUT)
GPIO.setup(6,GPIO.OUT)
GPIO.setup(13,GPIO.OUT)
GPIO.setup(19,GPIO.OUT)
GPIO.setup(26,GPIO.OUT)
GPIO.setup(21,GPIO.OUT)
GPIO.setup(20,GPIO.OUT)

# TURN ON RELAY 1
GPIO.output(2,1)
GPIO.output(3,1)
GPIO.output(4,1)
GPIO.output(17,1)
GPIO.output(27,1)
GPIO.output(22,1)
GPIO.output(10,1)
GPIO.output(9,1)
GPIO.output(11,1)
GPIO.output(5,1)
GPIO.output(6,1)
GPIO.output(13,1)
GPIO.output(19,1)
GPIO.output(26,1)
GPIO.output(21,1)
GPIO.output(20,1)

# CLEAN UP GPIO
# GPIO.cleanup()


