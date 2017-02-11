#!/bin/bash

echo "Initiating tests..."
chmod -R 0777 ./
echo ">>> Docker Lints:"
./specs/generic.spec.sh
if [ $? -eq 0 ]; then
  echo ">>> Docker Lints concluded and none failed."
else
  echo ">>> Tests failed."
  exit 1
fi
echo "Initiating DockerHub builds..."
#Pandora MYSQL
curl --data build=true -X POST 'https://registry.hub.docker.com/u/opsforge/pandorafms-mysql/trigger/0a89f0e6-1388-4ec8-a58b-342a0f023981/'

#Pandora Server
curl --data build=true -X POST 'https://registry.hub.docker.com/u/opsforge/pandorafms-server/trigger/4945c1a2-e9db-4d3d-a7e5-d5f81ef776c3/'

#Pandora Console
curl --data build=true -X POST 'https://registry.hub.docker.com/u/opsforge/pandorafms-console/trigger/51da6a57-6df6-4929-a26b-194a63b3b4ba/'

echo "DockerHub build triggered..."
