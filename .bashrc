# Launch zsh.
 if [ -t 1 ]; then # Bash' output is terminal.
 exec zsh # Run zsh.
 fi
