import $ from 'jquery';
import './bootstrap';
import 'laravel-datatables-vite';

import { DataTable } from 'simple-datatables';

if (document.getElementById("export-table") && typeof DataTable !== 'undefined') {
    const table = new DataTable("#users-table",{
        searchable:false,
    });
}
