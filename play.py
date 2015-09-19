#!/usr/bin/env python

import pygame
import sys

def play( dir ):
	pygame.mixer.init(48000, -16, 1, 1024)
	pygame.mixer.music.load(dir)
	pygame.mixer.music.play()
	while pygame.mixer.music.get_busy() == True:
		continue
	return
if len(sys.argv) == 2:
	play(sys.argv[1])
elif len(sys.argv) < 2:
	print "arguments are too damn low"
else:
	print "arguments are too damn high"
