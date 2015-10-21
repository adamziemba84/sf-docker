#!/usr/bin/env bash
docker inspect --format '{{ .NetworkSettings.IPAddress }}' sfdocker_web_1