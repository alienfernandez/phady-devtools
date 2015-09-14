# Bash completion for phady-devtools,
_phady()
{
	local cur prev
	_get_comp_words_by_ref -n = cur prev

	commands="commands list enumerate controller create-controller project create-project"

	case "$prev" in
		project|create-project)
			COMPREPLY=($(compgen -W "--name --directory --type --template-path --use-config-yml --trace --help --namespace" -- "$cur"))
			return 0
			;;
	esac

	COMPREPLY=($(compgen -W "$commands" -- "$cur"))

} &&
complete -F _phady phady