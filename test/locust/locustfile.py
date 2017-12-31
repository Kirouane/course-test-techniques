from locust import HttpLocust, TaskSet, task
import uuid

class GeneratePDFSet(TaskSet):
    @task(5)
    def getList(self):
        self.client.get("/pdf")

    @task(1)
    def create(self):
        self.client.post("/url", {"name":"TestLocust" + str(uuid.uuid4()), "url":"http://localhost:4545/html"})

class MyLocust(HttpLocust):
    min_wait = 1000
    max_wait = 5000
    task_set = GeneratePDFSet