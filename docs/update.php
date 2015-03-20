<h1>Update</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
bool Update ( string table, [List&lt;string&gt; cols, List&lt;string&gt; where] )
</pre>
Обновляет данные в Базе данных возвращая только результат выполнения true - если обновление произошло успешно и false - если что-то пошло не так.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">table</h3><span class="paragraph">Название таблицы в Базе Данных</span>
<h3 class="perem">cols</h3><span class="paragraph"><font color="red"><b>Не обязательно к заполнению</b></font></span><br/><span class="paragraph">Переменная в которой хранятся подготовленные к <a href="index.php?page=prepare-update">обновлению</a> поля</span>
<h3 class="perem">where</h3><span class="paragraph"><font color="red"><b>Не обязательно к заполнению</b></font></span><br/><span class="paragraph">Переменная в которой хранятся подготовленные <a href="index.php?page=prepare-where">условия</a> обновления</span>
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
            Test.PrepareUpdate("test", 11);
            List&lt;string&gt; cols = Test.ReturnUpdate("test");
            List&lt;string&gt; wher = Test.ReturnWhere("test", 11);
            bool view = Test.Update("test", cols, wher);
            if(view) {
                Console.WriteLine("Данные в Базе данных успешно добавленны");
            } else {
                Console.WriteLine("При обновлении данных в Базе Данных произошла поломка. За дополнительной информацией - обратитесь в файл-лог.");
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
            Test.PrepareUpdate("test", 11);
            Test.PrepareUpdate("tests", "test");
            List&lt;string&gt; wher = Test.ReturnWhere("test", 11);
            bool view = Test.Update("test");
            if(view) {
                Console.WriteLine("Данные в Базе данных успешно добавленны");
            } else {
                Console.WriteLine("При обновлении данных в Базе Данных произошла поломка. За дополнительной информацией - обратитесь в файл-лог.");
            }
            Console.ReadLine();
        }
    }
}
</pre>