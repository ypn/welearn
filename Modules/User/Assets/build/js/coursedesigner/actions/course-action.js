import dispatcher from '../dispatcher/dispatcher';

export function addSection(title){
  dispatcher.dispatch({
    type:'ADD_NEW_SECTION',
    title
  })
}

export function deleteSection(index){
  dispatcher.dispatch({
    type:'DELETE_SECTION',
    index
  });
}

/*
*@param:index - Chỉ số của section
*/
export function addLesson(index){
  dispatcher.dispatch({
    type:'ADD_NEW_LESSON',
    index
  })
}

export function deleteLesson(index,sectionIndex){
  dispatcher.dispatch({
    type:'DELETE_LESSON',
    index,
    sectionIndex
  });
}
