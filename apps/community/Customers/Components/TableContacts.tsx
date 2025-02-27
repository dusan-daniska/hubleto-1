import React, { Component } from 'react'
import Table, { TableProps, TableState } from 'adios/Table';

interface TableContactsProps extends TableProps {
  // showHeader: boolean,
  // showFooter: boolean
}

interface TableContactsState extends TableState {
}

export default class TableContacts extends Table<TableContactsProps, TableContactsState> {
  static defaultProps = {
    ...Table.defaultProps,
    itemsPerPage: 15,
    formUseModalSimple: true,
    model: 'HubletoApp/Community/Customers/Models/Contact',
  }

  props: TableContactsProps;
  state: TableContactsState;

  translationContext: string = 'hubleto.app.customers.tableContacts';

  constructor(props: TableContactsProps) {
    super(props);
    this.state = this.getStateFromProps(props);
  }
}