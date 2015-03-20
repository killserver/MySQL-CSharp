<h1>PrepareInsert (+1 overload)</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void PrepareInsert ( string col, int val )
void PrepareInsert ( string col, string val )
</pre>
Подготавливает добавление данных в Базу данных введённым значением.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">col</h3><span class="paragraph">Поле данные которого будут добавленны в Базы Данных</span>
<h3 class="perem">val</h3><span class="paragraph"><u>Согласно <a href="https://msdn.microsoft.com/ru-ru/library/vstudio/ms229029%28v=vs.100%29.aspx" target="_blank">перегрузке</a> переменная может быть как <b>текстовой</b>, так и <b>числовой</b>.</u></span><br /><span class="paragraph">Данная переменная указывает какими с данными будет добавленна запись в Базу Данных</span>
<br />
<h2>Пример:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Test.PrepareInsert("test", 11);
            bool view = Test.Insert("test");
            if(view) {
                Console.WriteLine("Данные в Базе данных успешно добавленны");
            } else {
                Console.WriteLine("При добавлении данных в Базе Данных произошла поломка. За дополнительной информацией - обратитесь в файл-лог.");
            }
            Console.ReadLine();
        }
    }
}
</pre>