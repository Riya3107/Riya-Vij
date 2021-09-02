//component in react is a js function
//in React a custom component should be declared with a Capital letter

import React, { useState } from "react";
import "./ExpensesetItem.css";
import ExpenseDate from "./ExpenseDate";
import Card from "./Card";

const ExpenseItem = (props) => {
  //function click Handler

  const [title, setTitle] = useState(props.title);
  console.log('ExpenseItem evaluated by react')

  const clickHandler = () => {
    setTitle("Updated!");
    console.log(title);
  };

  return (
    <Card className="expense-item, date1">
      <ExpenseDate date={props.date} />
      <div className="expense-item_description, desc1">
        <h2>{title}</h2>
      </div>
      <div className="expense-item__price, amt1">${props.amount}</div>
      <button onClick={clickHandler}>Change Title</button>
    </Card>
  );
};

export default ExpenseItem;
