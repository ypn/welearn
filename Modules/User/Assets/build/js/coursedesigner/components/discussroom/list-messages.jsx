import React from 'react';
import MessageItem from './message-item';

export default class ListMessages extends React.Component{
  render(){
    var messages= ['helo','chung may','dang lam','gi the','helo','chung may','dang lam','gi the'];
    return(
      <div className="list-message">
        {
          messages.map((note)=>{
            return(
              <MessageItem/>
            )
          })
        }
      </div>
    )
  }
}
