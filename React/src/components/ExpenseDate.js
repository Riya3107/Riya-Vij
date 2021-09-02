import './ExpenseDate.css';
function ExpenseDate(props){
    // const month = props.date.toLocaleString('en-US', { month: 'long' });
    // const day = props.date.toLocaleString('en-US', { day: '2-digit' });
    // const year = props.date.getFullYear();
   const expenseDate = new Date();

    return <div>
    <div className = "expense-date">{expenseDate.toDateString()}</div>
    {/* <div>{month}</div>
    <div>{year}</div> */}
  </div>

}

export default ExpenseDate;