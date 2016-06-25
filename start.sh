docker build -t website .
docker run -t -d -p 80:80 -i website