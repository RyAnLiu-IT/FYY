import os
import boto3
from flask import Flask , render_template , jsonify, request
from flask_babel import Babel,get_locale, gettext as _



app = Flask(__name__)
babel = Babel(app)


boto3Session = boto3.Session()
credentials = boto3Session.get_credentials()

LANGUAGES = {
    'zh': {'flag':'cn', 'name':'Chinese'}
} 


@app.route('/')
def hello_word():
    return render_template('serviceDoctor.html', title='index')
    
@app.route('/1')
def hello_word1():
    return render_template('searchDisease.html', title='Search Disease')


@babel.localeselector
def get_locale():
    return request.accept_languages.best_match(LANGUAGES.keys())


#app.run(host=os.getenv('IP', '0.0.0.0'),port=int(os.getenv('PORT', 8080)))

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=8080, debug=True)