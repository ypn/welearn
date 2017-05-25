import {EventEmitter} from 'events';
import dispatcher from '../dispatcher/dispatcher';

class CourseStores extends EventEmitter{
  constructor(){
    super();
    this.totalSections = 0;
    this.totalLessons = 0;
    this.sections =[];
  }

  //Tạo phần mới cho khóa học
  createSection(title){
    this.sections.push({
      title,
      lessons:[]
    });

    this.totalSections += 1;
    this.emit('create-new-section');
  }

  deleteSection(index){
    this.totalLessons -=   this.sections[index].lessons.length;
    this.sections.splice(index,1);
    this.totalSections -= 1;

    this.emit('delete-section');
  }

  //Tạo bài học mới trong 1 phần nào đó.
  createLesson(index){
    this.sections[index].lessons.push({});
    this.totalLessons += 1;
    this.emit('lesson-change');
  }

  deleteLesson(index,sectionIndex){
    this.sections[sectionIndex].lessons.splice(index,1);
    this.totalLessons -= 1;
    this.emit('lesson-change');
  }



  handleAction(action){
    switch (action.type) {
      case 'ADD_NEW_SECTION':
        this.createSection(action.title);
        break;
      case 'DELETE_SECTION':
        this.deleteSection(action.index);
        break;
      case 'ADD_NEW_LESSON':
        this.createLesson(action.index);
        break;
      case 'DELETE_LESSON':
        this.deleteLesson(action.index,action.sectionIndex);
        break;
      default:
        break;
    }
  }

  getAllSection(){
    return this.sections;
  }

  getTotalLessons(){
    return this.totalLessons;
  }

  getTotalSections(){
    return this.totalSections;
  }

}

const Stores = new CourseStores();
dispatcher.register(Stores.handleAction.bind(Stores));

export default Stores;
