import React, { Component } from "react";

class DeexHelloWorldChild extends Component {
  static slug = "deex_hello_world_child";
  render() {
    return <img src={this.props.image || ""} alt="hwllo" />;
  }
}

export default DeexHelloWorldChild;
