from flask import Flask, request, render_template
import mysql.connector

app = Flask(__name__)

# Database configuration
db_config = {
host = 'database'; # Or server IP
username = 'mysqluser'; # Replace with your database username
password = 'password'; # Replace with your database password
dbname = 'contact_form_db'; # Replace with your database name
}
def form():
    return render_template('index.html')

@app.route('/submit', methods=['POST'])

def submit_form():
    name = request.form['name']

    try:
        conn = mysql.connector.connect(**db_config)
        cursor = conn.cursor()

        query = "INSERT INTO users (name) VALUES (%s)"
        cursor.execute(query, (name,))
        conn.commit()

        return f"hello, {name}! data has been saved"

    except mysql.connector.Error as err:
        return f"Error: {err}"

    finally: 
        if 'conn' in locals():
            conn.close()

if __name__ == '__main__':
    app.run(debug=True)