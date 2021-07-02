import mysql.connector
import numpy as np
import matplotlib.pyplot as plt

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="agharta",
  database="emmaProject"
)

cursor = mydb.cursor()
cursor.execute("SELECT * FROM sensor_temperaturas")
results = cursor.fetchall()

temp = np.zeros(len(results))
t = np.linspace(0, len(results), len(results))

for i in range(len(results)):
  temp[i] = results[i][1]

plt.stem(t,temp, '.')
plt.show()
