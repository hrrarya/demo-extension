// External Dependencies
import React, { Component } from "react";
// Internal Dependencies
import './style.css';



class HelloWorld extends Component {
  static slug = "deex_hello_world";

  render() {
      return (<div>{this.props.content}</div>);
  }
}

export default HelloWorld;
