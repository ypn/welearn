import React from 'react';
import '../../../css/wln.chat.css';
import ChatStore from '../../stores/ChatStores';
import * as ChatActions from '../../actions/ChatActions';
var _global;

const MsgItem = React.createClass({
  render(){
    return (<li>{this.props.children}</li>)
  }
})

const MsgList = React.createClass({
  getInitialState(){
    _global = this;
    return {mang:ChatStore.getAll()}
  },

  componentWillMount(){
    ChatStore.on('change',()=>{
      this.setState({
        mang:ChatStore.getAll()
      })
    })
  },

  render:function(){
    return (
      <ul>
        {
          this.state.mang.map(function(note,index){
            return <MsgItem>{note}</MsgItem>
          })
        }
      </ul>
    )
  }
});

const MsgInput = React.createClass({

  send(){
    if(this.refs.txt.value != ''){
      // _global.setState({
      //   mang:_global.state.mang.concat(this.refs.txt.value)
      // });

      ChatActions.createChatItem(this.refs.txt.value);
    }
    this.refs.txt.value = '';
  },

  handerEnterPress(e){
    if(e.key == 'Enter'){
      this.send();
    }
  },

  render:function(){
    return (
      <div>
        <input type="text" ref="txt" onKeyPress={this.handerEnterPress} placeholder="Enter text here"></input>
        <button onClick = { this.send }>Send</button>
      </div>
    )
  }
});

export default class MessageItem extends React.Component{
  render(){
    return(
      <div  className="wln-chat-wrapper">
        <MsgList/>
        <MsgInput/>
      </div>
    )
  }
}
