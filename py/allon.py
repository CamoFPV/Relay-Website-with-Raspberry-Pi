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
GPIO.output(2,0)
GPIO.output(3,0)
GPIO.output(4,0)
GPIO.output(17,0)
GPIO.output(27,0)
GPIO.output(22,0)
GPIO.output(10,0)
GPIO.output(9,0)
GPIO.output(11,0)
GPIO.output(5,0)
GPIO.output(6,0)
GPIO.output(13,0)
GPIO.output(19,0)
GPIO.output(26,0)
GPIO.output(21,0)
GPIO.output(20,0)

# CLEAN UP GPIO
# GPIO.cleanup()


