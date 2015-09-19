# Twitch\_notifier

## Description
php script with a bit of python which use the twitch API to check the status of one streamer and play a sound if he's online.

Created originally to transform a Raspberry Pi into a stream-notifier.

Not tested on a classic-desktop configuration
## Usage
Twitch\_notifier take *two* arguments

`php twitch_notifier.php <streamer-name> <path-of-the-sound>`

(note : sound file can be in all format supported by pygame, more info below)
## Exemple
To check if kikettestar is streaming, and play sound.mp3 if he's online we can use

`php twitch_notifier.php kikettestar ./sound.mp3`

(note : in this case, the audio file is assumed in the same directory as the script)

congrats !
## Prerequisites
Of course you'll need to have php and Python ready, in addition you also need to have the Pygame module installed.

[More info about Pygame](http://pygame.org/hifi.html)
![alt text](http://img.vivaolinux.com.br/imagens/dicas/comunidade/pygame-logo-2478200461-6_avatar.png "pygame logo")
