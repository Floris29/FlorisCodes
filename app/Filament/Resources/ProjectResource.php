<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Tool;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image_path')
                    ->image()
                    ->required(),
                    Forms\Components\Select::make('skills_used')
                    ->label('Skills Used')
                    ->multiple()
                    ->options([
                        'html' => 'HTML',
                        'css' => 'CSS',
                        'javascript' => 'JavaScript',
                        'php' => 'PHP',
                        'laravel' => 'Laravel',
                        'mysql' => 'MySQL',
                        'tailwind' => 'Tailwind',
                        'wordpress' => 'WordPress',
                        'nodejs' => 'Node.js',
                        'aspnet' => 'ASP.NET',
                        'csharp' => 'C#',
                        'java' => 'Java',
                        'discordjs' => 'Discord.js',
                        'seo' => 'SEO',
            ])                
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->label("Project URL"),
                Forms\Components\TextInput::make('github')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_path'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                ]),
            ]);
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
