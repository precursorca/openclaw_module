#!/bin/bash

# openclaw controller
CTL="${BASEURL}index.php?/module/openclaw/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/openclaw.sh" -o "${MUNKIPATH}preflight.d/openclaw.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/openclaw.sh"

	# Set preference to include this file in the preflight check
	setreportpref "openclaw" "${CACHEPATH}openclaw.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/openclaw.sh"

	# Signal that we had an error
	ERR=1
fi
