import {EventEmitter} from 'events';
import dispatcher from '../dispatcher/dispatcher';

class ChatStore extends EventEmitter{
  constructor(){
    super();
    this.chats = []
  }

  createChatItem(text){
    this.chats.push(text)
    this.emit('change');
  }

  handlerAction(action){
    switch (action.type) {
      case 'CREATE_CHAT_ITEM':
        this.createChatItem(action.text)
        break;
      default:

    }
  }

  getAll(){
    return this.chats;
  }
}

const chats = new ChatStore;
dispatcher.register(chats.handlerAction.bind(chats));


export default chats;
