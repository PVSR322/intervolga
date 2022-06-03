function validate_form ( )
{
    valid = true;

        if ( document.input_country.data_country.value == "" )
        {
                alert ( "Пожалуйста введите страну" );
                valid = false;
        }

        return valid;
}
