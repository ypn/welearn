import React from 'react';
import ReactDOM from  'react-dom';
import MessageItem from './Chatitems/MessageItem'
const element = <h1>Hello, world</h1>;
ReactDOM.render(
  <MessageItem/>
  ,
  document.getElementById('wln-chat-room')

);
