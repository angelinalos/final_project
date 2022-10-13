import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom';
import '../css/app.css'
import App from './components/App';
import Blob from './components/Spline/Blob';


if(document.getElementById('app')){
    ReactDOM.render(<App/>, document.getElementById('app'))
}

if(document.getElementById('blob')){
    ReactDOM.render(<Blob/>, document.getElementById('blob'))
}
