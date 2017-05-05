import dispatcher from '../dispatcher/dispatcher';

export function createChatItem(text){
  dispatcher.dispatch({
    type:'CREATE_CHAT_ITEM',
    text:text
  })
}
