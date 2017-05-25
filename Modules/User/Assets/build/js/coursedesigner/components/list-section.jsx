import React  from 'react';
import Section from './single-section';
import CourseStores from '../stores/course-stores';

export default class ListSection extends React.Component{

  constructor(props){
    super(props);
    this.state = {
      sections:CourseStores.getAllSection()
    }
  }

  render(){
    return(
      <div className="table-responsive">
        {
          this.state.sections.map((note,index)=>{
            return(
              <Section note={note} key={index} index={index}/>
            )
          })
        }
      </div>
    )
  }
}
