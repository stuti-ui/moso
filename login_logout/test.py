import pyodbc
conn = pyodbc.connect("Driver={SQL Server Native Client 11.0};"
                      "Server=DESKTOP-845VQUF\SQLEXPRESS;"
                      "Database=LOGIN;"
                      "Trusted_Connection=yes;")

cursor = conn.cursor()
cursor.execute('SELECT * FROM Users')

for row in cursor:
    print('row = %r' % (row,))