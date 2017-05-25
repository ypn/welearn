import React from 'react';
import * as CourseAction from '../actions/course-action';

export default class Lesson extends React.Component{
  render(){
      return(
        <tr>
          <td>Bài {this.props.lessonIndex}</td>
          <td><input type="text" className="form-control" placeholder="Nhập tên bài học"/></td>
          <td>
            <div className="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy">
              <input type="text" className="form-control"/>
              <div className="input-group-addon">
                  <span className="glyphicon glyphicon-th"></span>
              </div>
          </div>
          </td>
          <td>
            <a href="javascript:void(0);" onClick={this.deleteLesson.bind(this)}>Xóa</a>
          </td>
        </tr>
      )
  }

  deleteLesson(){
    CourseAction.deleteLesson(this.props.index,this.props.sectionIndex);
  }

}
