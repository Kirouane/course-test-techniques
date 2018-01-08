#Go PDF Bot
cd /home/nassim.kirouane/go/src/github.com/kirouane/go-pdf-bot && go run $(ls -1 *.go | grep -v _test.go)
google-chrome-stable --disable-gpu  --headless --remote-debugging-port=9222

#Cours
cd /var/www/course-test-techniques/backend && node index.js

cd /var/www/course-test-techniques/frontend && php -S localhost:8002

#Mountebank
cd /var/www/course-test-techniques/test/mountebank && node_modules/.bin/mb --configfile imposters.ejs

#locust
cd /var/www/course-test-techniques/test/locust && locust --host=http://localhost:8001

#prometheus
cd /home/nassim.kirouane/prometheus-2.0.0.linux-amd64 && ./prometheus --config.file=prometheus.yml

#clean
rm -rf /home/nassim.kirouane/go/src/github.com/kirouane/go-pdf-bot/storage/pdf/* && rm -rf /var/www/course-test-techniques/frontend/storage/*

#phpbench
bin/phpbench run Bench --report=aggregate
