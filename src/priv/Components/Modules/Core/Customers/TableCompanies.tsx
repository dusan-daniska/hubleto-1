import React, { Component } from 'react'
import Table, { TableProps, TableState } from 'adios/Table';
import FormCompany from './FormCompany';

interface TableCompaniesProps extends TableProps {
}

interface TableCompaniesState extends TableState {
}

export default class TableCompanies extends Table<TableCompaniesProps, TableCompaniesState> {
  static defaultProps = {
    itemsPerPage: 15,
    formUseModalSimple: true,
    model: 'CeremonyCrmApp/Modules/Core/Customers/Models/Company',
  }

  props: TableCompaniesProps;
  /* state: TableCompaniesState;

  constructor(props: TableCompaniesProps) {
    super(props);
    this.state = this.getStateFromProps(props);
  } */

 /*  getFormModalParams(): any {
    let params: any = super.getFormModalParams();
    params.type = this.state.formId == -1 ? 'centered' : 'right wide';
    return params;
  }
  getStateFromProps(props: TableCompaniesProps) {
    return {
      ...super.getStateFromProps(props),
    }
  } */

  renderForm(): JSX.Element {
    let formParams = this.getFormParams();
    return <FormCompany {...formParams}/>;
  }
}