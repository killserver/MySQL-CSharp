<h1>Last_Insert_Id</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
long Last_Insert_Id ( void )
</pre>
Возвращает ID последнего из добавленных данных<br />
<br />
<h2>Примеры:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Dictionary&lt;string, List&lt;string&gt;&gt; cols = Test.ReturnInsert("test");
            bool vals = Test.Insert("test", cols);
            if(vals) {
                long tt = Test.Last_Insert_Id();
                Console.WriteLine("Id последних добавленных данных: " + Convert.ToInt32(tt));
            } else {
                Console.WriteLine("При попытке добавить данные в таблицу test произошла поломка. Обратитесь в файл-лог за дополнительной информацией.");
            }
            Console.ReadLine();
        }
    }
}
</pre>
<hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Test.PrepareInsert("test");
            bool vals = Test.Insert("test");
            if(vals) {
                long tt = Test.Last_Insert_Id();
                Console.WriteLine("Id последних добавленных данных: " + Convert.ToInt32(tt));
            } else {
                Console.WriteLine("При попытке добавить данные в таблицу test произошла поломка. Обратитесь в файл-лог за дополнительной информацией.");
            }
            Console.ReadLine();
        }
    }
}
</pre>