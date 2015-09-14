#!/usr/bin/env bash

#/*
#+------------------------------------------------------------------------+
#| Phady Framework                                                        |
#+------------------------------------------------------------------------+
#| Copyright (c) 2015                                                     |
#+------------------------------------------------------------------------+
#| Phady Framework is a complement of Phalcon Framework                   |
#|                                                                        |
#+------------------------------------------------------------------------+
#| Authors: Alien fernandez Fuentes <alienfernandez85@gmail.com>          |
#+------------------------------------------------------------------------+
#*/

alter_profile(){
	DIR="$1"
	export PTOOLSPATH="$DIR/"
	export PATH="$PATH:$DIR"
	PTOOLSVAR="export PTOOLSPATH=$DIR/"
	PATHVAR="export PATH=\$PATH:$DIR"
	if [ -e $HOME/.bash_profile ]; then
		echo "$PTOOLSVAR" >> $HOME/.bash_profile
		echo "$PATHVAR" >> $HOME/.bash_profile
		source $HOME/.bash_profile
	elif [ -e $HOME/.profile ]; then
		echo "$PTOOLSVAR" >> $HOME/.profile
		echo "$PATHVAR" >> $HOME/.profile
		source $HOME/.profile
	elif [ -e $HOME/.bashrc ]; then
		echo "$PTOOLSVAR" >> $HOME/.bashrc
		echo "$PATHVAR" >> $HOME/.bashrc
		source $HOME/.bashrc
	else
		echo "No bash profile detected. Environment vars might disappear on console restart!"
	fi

	if [ -e $HOME/.cshrc ]; then
		echo "setenv PTOOLSPATH ${DIR}/" >> $HOME/.cshrc
		echo "setenv PATH \${PATH}:$DIR" >> $HOME/.cshrc
	fi
}

check_install(){
	if [ -z "$PTOOLSPATH" ]; then
		if [ `echo $0 | grep "bash"`=="bash" ]; then ## bash check (linux/osx)
			echo "Phady Developer Tools Installer"
			echo "Make sure phady.sh is in the same dir as phady.php and that you are running this with sudo or as root."
			echo "Installing Devtools..."
			DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
			alter_profile $DIR
			echo "Working dir is: $DIR"
		else
			echo 'Phady Developer Tools need to be installed...'
			echo 'Run this installer with ". ./phady.sh". Exiting...'
			return 1
		fi
		app="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
		if [ ! -L $app/phady ]; then
			echo "Generating symlink..."
			ln -s $app/phady.sh $app/phady
			chmod +x $app/phady
			echo "Done. 	 installed!"
		fi
		return 1
	fi
	return 0
}

if check_install; then
	php "$PTOOLSPATH/phady.php" $*
fi
